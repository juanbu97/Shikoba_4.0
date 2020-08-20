import { Injectable } from '@angular/core';
import { CanActivate, Router } from '@angular/router';
import { AuthService } from '../../services/auth.service';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class IsLoggedGuard implements CanActivate {


  constructor(
    public authService: AuthService,
    public router: Router,
  ) {
  }

  canActivate(): Observable<boolean> {
    return this.authService.isLogged().pipe(map(user => {
      if (user )
        this.router.navigate(['/home']);
      else
        return true;
    }));
  }
}

