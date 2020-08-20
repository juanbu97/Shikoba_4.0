import { Injectable } from '@angular/core';
import { AngularFireAuth } from '@angular/fire/auth';
import * as firebase from 'firebase';
import { Observable, of } from 'rxjs';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  private user: Observable<firebase.User>;
  private userDetails: firebase.User = null;

  constructor(
    public afAuth: AngularFireAuth,
    public router: Router,
  ) {
    this.user = afAuth.authState;
    this.user.subscribe(
      (user) => {
        if (user) {
          console.log("Está registrado");
          this.userDetails = user;
          console.log(this.userDetails);
        }
        else {
          console.log("No está resgistrado");
          this.userDetails = null;
        }
      }
    );
  }

  logout() {
    this.userDetails = null;
    this.user = null;
    firebase.auth().signOut().then(() => {
      this.router.navigate(['/login']);
    }).catch(err => console.log(err.message));
  };


  loginGoogle(){
    this.afAuth.setPersistence(firebase.auth.Auth.Persistence.LOCAL).then(()=> {
      return this.afAuth.signInWithPopup(new firebase.auth.GoogleAuthProvider).then(()=> {
        this.router.navigate(['/home']);
      }).catch(err => console.log(err.message));
    });
  }


  isLogged() {
    return this.afAuth.authState;
  }

  getUser() {
    if (firebase.auth().currentUser)
      return firebase.auth().currentUser.email;
    else
      return "";
  }

  isAuthenticated() {
    const user = firebase.auth().currentUser;
    if (user) {
      return true;
    } else {
      return false;
    }
  }
}
