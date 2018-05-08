import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, Validators} from '@angular/forms';
import {AuthenticationService} from '../../providers/authentication.service';
import {Router, RouterModule} from '@angular/router';
import {AlertService} from "../../providers/alert.service";


@Component({
    selector: 'app-login',
    templateUrl: './login.component.html',
    styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
    loginForm: FormGroup;
    error: string = '';
    loading: boolean;
    showModal: boolean;

    constructor(private formBuilder: FormBuilder,
                private authenticationService: AuthenticationService,
                private router: Router,
                public  alertService: AlertService) {
        this.loginForm = formBuilder.group({
            'username': ['', Validators.required],
            'password': ['', Validators.required]
        });
    }

    ngOnInit() {
    }

    onSubmit() {
        this.loading = true;
        this.authenticationService.authenticate(this.loginForm.value)
            .subscribe(
                data => {
                    localStorage.setItem('id_token', data.token);
                    this.router.navigate(['home']);
                    this.alertService.success('Connexion réussi ! ', true);
                    this.loading = false;
                    this.showModal = false;
                },
                error => {
                    this.alertService.error('Identifiant incorrect ! ', true);
                    this.loading = false;
                    this.showModal = false;
                }
            );
    }
    show() {
        this.showModal = true;
    }

    hide() {
        this.showModal = false;
    }

}
