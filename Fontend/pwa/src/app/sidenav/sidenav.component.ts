import { Component, OnInit } from '@angular/core';
import { AuthService } from 'src/services/auth.service';

declare const M: any;


@Component({
  selector: 'app-sidenav',
  templateUrl: './sidenav.component.html',
  styleUrls: ['./sidenav.component.css']
})
export class SidenavComponent implements OnInit {

  constructor(
    private _authService: AuthService,
  ) { }

  ngOnInit(): void {
    M.AutoInit();

    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems, {
        draggable: true
      });

    });

  }

  onClickLogout(){
    this._authService.logout();
  }

}
