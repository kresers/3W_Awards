// authentication/authentication.service.ts

import {Http, Response, Headers, RequestOptions, URLSearchParams} from '@angular/http';
import {tokenNotExpired} from 'angular2-jwt';
import 'rxjs/add/operator/map';
import {Router} from '@angular/router';
import * as JWT from 'jwt-decode';
import {Injectable} from '@angular/core';
import {appConfig} from "../app/app.config";

@Injectable()
export class AuthenticationService {
    constructor(private http: Http, private router: Router) {
    }
    authorization: boolean;

    /**
     *
     * Description : This function call api to know if current user have good credential
     * @param user
     * @returns {Observable<any>}
     */
    authenticate(user: any) {
        let url = appConfig.loginUrl;
        // let url = appConfig.loginUrl;
        let body = new URLSearchParams();
        body.append('username', user.username);
        body.append('password', user.password);
        let headers = new Headers({'Content-Type': 'application/x-www-form-urlencoded'});
        let options = new RequestOptions({headers: headers});

        return this.http.post(url, body.toString(), options)
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

    /**
     * Description : this function return all roles of the current user was loggin
     * @returns {Array<string>}
     */
    getRolesCurrentUser():Array<string> {
        let token = localStorage.getItem('id_token');
        let tokenDecode = JWT(token);

        return tokenDecode.roles;
    }

    /**
     * Description: this function return if the current user is logged or not
     * @returns {boolean}
     */
    isLogged()
    {
        if(localStorage.getItem('id_token'))
        {
            return true
        }
        else {
            return false
        }
    }

    /**
     * Description: this function return the username of the current user. We don t user id cause, username is unique
     */
    getUsernameCurrentUser()
    {
        if(this.isLogged())
        {
            let token = localStorage.getItem('id_token');
            let tokenDecode = JWT(token);

            return tokenDecode.username;
        }
        else
        {
            return 'Need loggin to get UserName'
        }

    }


    /**
     * Description : this function return true or false if the current user can access to the page
     * @param role -> the role you want restrict
     * @returns {boolean}
     */
    isAutorized(role) {
        let roles = this.getRolesCurrentUser();
        let authorization = false;
        roles.forEach(function (value) {
            if (role == value) {
                authorization = true;
            }
        });
        return authorization;
    }
}
