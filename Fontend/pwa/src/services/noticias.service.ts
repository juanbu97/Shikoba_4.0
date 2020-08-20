import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { map } from 'rxjs/operators';
import { GLOBAL } from './global';
import { AuthService } from './auth.service';

@Injectable({
  providedIn: 'root'
})
export class NoticiasService {

  public url: string;


  constructor(
    private _http:HttpClient,
    public authService:AuthService,
  ) {
    this.url = GLOBAL.url1;
  }

  getNoticia(){
    return this._http.get(this.url+"/noticias/"+this.authService.getUser())
    .pipe(map(res => res));
  }
}
