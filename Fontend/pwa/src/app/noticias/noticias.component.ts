import { Component, OnInit } from '@angular/core';
import { Noticia } from 'src/app/model/noticia';
import { NoticiasService } from 'src/services/noticias.service';
import { Alumno } from '../model/alumno';
import { AlumnosService } from 'src/services/alumnos.service';


@Component({
  selector: 'app-noticias',
  templateUrl: './noticias.component.html',
  styleUrls: ['./noticias.component.css']
})
export class NoticiasComponent implements OnInit {

  public title:string;
  public noticias:Noticia[];
  public alumno:Alumno;

  constructor(
    private _noticiasService: NoticiasService,
    private _alumnoService:AlumnosService,
  ) { }

  ngOnInit(): void {

    this._alumnoService.getAlumno().subscribe(
      result => {
        if(result['code'] != 200){
          console.log(result);
        }else{
          this.alumno = result['data'];
        }
      },
      error => {
        console.log(<any>error);
      }
    );


    this._noticiasService.getNoticia().subscribe(
      result => {
        if(result['code'] != 200){
          console.log(result);
        }else{
          this.noticias = result['data'];
        }
      },
      error => {
        console.log(<any>error);
      }

    )
  }

}
