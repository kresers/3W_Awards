import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, Validators} from '@angular/forms';
import {AuthenticationService} from '../../providers/authentication.service';
import {Router, RouterModule} from '@angular/router';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  loginForm: FormGroup;
  error: string = '';

  constructor(private formBuilder: FormBuilder,
              private authenticationService: AuthenticationService,
              private router: Router) {
    this.loginForm = formBuilder.group({
      'username': ['', Validators.required],
      'password': ['', Validators.required]
    });
  }

  ngOnInit() {
  }

  onSubmit() {
    this.authenticationService.authenticate(this.loginForm.value)
      .subscribe(
        data => {
          localStorage.setItem('id_token', data.token);
          this.router.navigate(['home']);
        },
        error => this.error = error.message
      );
  }
}
