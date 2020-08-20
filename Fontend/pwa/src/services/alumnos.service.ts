import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { map } from 'rxjs/operators';
import { GLOBAL } from './global';
import { AuthService } from './auth.service';

@Injectable({
  providedIn: 'root'
})
export class AlumnosService {

  public url: string;


  constructor(
    private _http:HttpClient,
    public authService:AuthService,
  ) {
    this.url = GLOBAL.url1;
  }

  getAlumno(){
    return this._http.get(this.url+"/alumno/'"+this.authService.getUser()+"'")
    .pipe(map(res => res));
  }
}
