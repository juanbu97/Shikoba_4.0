import { Component, OnInit } from '@angular/core';
import { AuthService } from '../../services/auth.service';
import { GLOBAL } from '../../services/global';



@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  constructor(
    public auth: AuthService
  ) { }

  ngOnInit(): void {


  }

  saltarPopUp() {
    this.auth.loginGoogle();
  }
}
