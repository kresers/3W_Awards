import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, Validators} from "@angular/forms";
import {Router} from "@angular/router";
import {AuthenticationService} from "angular-authentication-service";

@Component({
    selector: 'app-login',
    templateUrl: './login.component.html',
    styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
    loginForm: FormGroup;
    error: string = '';

    constructor(private formBuilder: FormBuilder, private authenticationService: AuthenticationService, private router: Router) {
        this.loginForm = formBuilder.group({
            'username': ['', Validators.required],
            'password': ['', Validators.required]
        });
    }

    ngOnInit() {
    }

    onSubmit() {
        this.authenticationService.login(this.loginForm.value)
            .subscribe(
                data => {
                    localStorage.setItem('id_token', data.access_token);
                    this.router.navigate(['post']);
                },
                error => this.error = error.message
            );
    }

}
