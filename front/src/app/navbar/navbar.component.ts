import { Component, OnInit } from '@angular/core';
import {AuthenticationService} from '../authentication/authentication.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {


  imgLogo = 'assets/img/logo.png';
  constructor(private auth: AuthenticationService) {
  }

  ngOnInit() {

  }

  autorized() {
      if (localStorage.getItem('id_token')) {
          return this.auth.isAutorized('ROLE_ADMIN');
      }
  }

  showBtn() {
    document.getElementById('menu-nav').style.display = 'block';
  }

  openSite(/*objet de type site*/) {
    /* */
  }
}
