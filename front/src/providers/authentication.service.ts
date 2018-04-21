// authentication/authentication.service.ts

import {Http, Response, Headers, RequestOptions, URLSearchParams} from '@angular/http';
import {tokenNotExpired} from 'angular2-jwt';
import 'rxjs/add/operator/map';
import {Router} from "@angular/router";
import * as JWT from 'jwt-decode';
import {Injectable} from "@angular/core";

@Injectable()
export class AuthenticationService {

    constructor(private http: Http, private router: Router) {
    }

    authorization: boolean;

    authenticate(user: any) {
        let url = 'https://3wawards.lycee-stvincent.net/api/login_check';
        let body = new URLSearchParams();
        body.append('username', user.username);
        body.append('password', user.password);
        let headers = new Headers({'Content-Type': 'application/x-www-form-urlencoded'});
        let options = new RequestOptions({headers: headers});

        return this.http
            .post(url, body.toString(), options)
            .map((data: Response) => data.json());
    }
    /* this function delete the token and redirect the current user to the homepage */
    logout() {
        this.authorization = false;
        localStorage.removeItem('id_token');
    }

    loggedIn() {
        return tokenNotExpired();
    }

    /* this function return all roles of the current user was loggin */
    getRolesCurrentUser() {
        let token = localStorage.getItem('id_token');
        let tokenDecode = JWT(token);

        return tokenDecode.roles;
    }

    /* this function return true or false if the current user can access to the page
    * params :
    * role -> the role you want restrict
    */
    isAutorized(role) {
        let roles = this.getRolesCurrentUser();
        let authorization = false;
        roles.forEach(function (value) {
            console.log(value);
            console.log(role);
            if (role == value) {
                authorization = true;
            }
        });
        return authorization;
    }
}
