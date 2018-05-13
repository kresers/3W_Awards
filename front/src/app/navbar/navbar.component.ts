import {Component, OnInit} from '@angular/core';
import {AuthenticationService} from '../../providers/authentication.service';
import {Router} from "@angular/router";
import {appConfig} from "../app.config";

@Component({
    selector: 'app-navbar',
    templateUrl: './navbar.component.html',
    styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {


    search = false;
    imgLogo = 'assets/img/logo.png';

    constructor(private auth: AuthenticationService,private router:Router) {
    }

    ngOnInit() {

    }

    goToLoginBack()
    {
        this.router.navigate(['admin', { externalUrl: appConfig.backLoginUrl }]);
    }

    /**
     * Description: Call auth service to restrict a content to admin group. Go in your template and add "*ngIf="autorizedAdmin()" on the div
     * that you want restrict
     * @returns {boolean}
     */
    autorizedAdmin() {
        if (this.logged()) {
            return this.auth.isAutorized('ROLE_ADMIN');
        }
    }

    /**
     * Description : This function call auth service to know if current user is logged or not
     * @returns {boolean} -> true if is logged
     */
    logged() {
        return this.auth.isLogged();
    }

    openSearch() {
        this.search = true;
        if (this.search = true) {
            document.getElementById('textNavBar').style.display = 'none';
            document.getElementById('searchIcon').style.display = 'none';
        }
    }
}
