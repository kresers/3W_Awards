import {Component, OnInit} from '@angular/core';
import {AuthenticationService} from '../../providers/authentication.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {


  search = false;
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

  openSearch() {
    this.search = true;
    if (this.search = true) {
      document.getElementById('textNavBar').style.display = 'none';
      document.getElementById('searchIcon').style.display = 'none';
    }
  }

  openSite(/*objet de type site*/) {
    /* */
  }
}
