import { Injectable } from '@angular/core';
import { CanActivate, Router } from '@angular/router';
import { AuthService } from 'src/services/auth.service';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { GLOBAL } from 'src/services/global';


@Injectable({
  providedIn: 'root'
})
export class AuthGuardGuard implements CanActivate {

  regex: RegExp = /^[A-Za-z]+\d+[A-Za-z]+@iesgrancapitan.org$/


  constructor(
    public authService: AuthService,
    public router: Router
  ) {
  }

  canActivate(): Observable<boolean> {
    return this.authService.isLogged().pipe(map(user => {
      if (user && this.regex.test(user.email)) {
        GLOBAL.emailCorporativo = true;
        return true;
      } else {
        GLOBAL.emailCorporativo = false;
        this.authService.logout();
        this.router.navigate(['/login']);
      }
    }));
  }
}
