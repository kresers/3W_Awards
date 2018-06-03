// app.component.ts
import {Component} from '@angular/core';
import {Router} from '@angular/router';

import {AuthenticationService} from '../providers/authentication.service';
import {LoaderService} from "../providers/loader.service";
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html'
})
export class AppComponent {

    showLoader: boolean;


  constructor(private authenticationService: AuthenticationService, private router: Router,private loaderService: LoaderService) {
      loaderService.status.subscribe((val: boolean) => {
          this.showLoader = val;
      });
  }




}
