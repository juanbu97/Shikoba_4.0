<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: CsvResponse.php
 * @Updated: 2019
 * @Description: Clase para la gestión de los csv.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Utils;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class CsvResponse.
 */
class CsvResponse extends Response
{
    protected $data;
    protected $filename = 'export.csv';

    public function __construct($data = array(), $status = 200, $headers = array())
    {
        parent::__construct('', $status, $headers);
        $this->setData($data);
    }

    public function setData(array $data)
    {
        $output = fopen('php://temp', 'r+');
        foreach ($data as $row) {
            fputcsv($output, $row);
        }
        rewind($output);
        $this->data = '';
        while ($line = fgets($output)) {
            $this->data .= $line;
        }
        $this->data .= fgets($output);
        return $this->update();
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this->update();
    }

    protected function update()
    {
        $this->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $this->filename));
        if (!$this->headers->has('Content-Type')) {
            $this->headers->set('Content-Type', 'application/vnd.ms-excel;charset=utf-8');
        }
        return $this->setContent($this->data);
    }
}
