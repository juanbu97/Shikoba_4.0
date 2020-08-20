import { Component, OnInit } from '@angular/core';
import { AlumnosService } from '../../services/alumnos.service';
import { Alumno } from '../model/alumno';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  public title:string;
  public alumno:Alumno;

  constructor(
    private _alumnoService: AlumnosService,
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
  }
}

