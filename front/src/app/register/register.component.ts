import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, Validators} from '@angular/forms';
import {UserService} from '../../providers/user-service.service';
import {Router} from '@angular/router';
import * as model from '../model/user';
import {AlertService} from '../../providers/alert.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  registerForm: FormGroup;

  model: any = {};
  loading = false;

  constructor(private formBuilder: FormBuilder, private router: Router,
              private userService: UserService, private alertService: AlertService) {
  }

  ngOnInit() {
  }

  register() {
    this.loading = true;
    this.userService.create(this.model)
      .subscribe(
        data => {
          this.alertService.success('Inscription effectué avec succès', true);
          this.loading = false;
        },
        error => {
          this.alertService.error('Faudra que l on vérifie les patterns');
          this.loading = false;
        });
  }

}
