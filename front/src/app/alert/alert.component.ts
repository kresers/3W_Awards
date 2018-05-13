import {Component, OnDestroy} from '@angular/core';
import {Subscription} from 'rxjs/Subscription';
import {AlertService} from "../../providers/alert.service";
import {NgbAlertConfig} from "@ng-bootstrap/ng-bootstrap";


@Component({
  selector: 'app-alert',
  templateUrl: 'alert.component.html'
})

export class AlertComponent implements OnDestroy {
  private subscription: Subscription;
  message: any;

  constructor(private alertService: AlertService,public alertConfig: NgbAlertConfig) {
    // subscribe to alert messages
    this.subscription = alertService.getMessage().subscribe(message => {
      this.message = message;
      if (this.message)
      {
          this.msgConfig();
      }

    });

  }


  msgConfig()
  {
      if( this.message.type === 'success')
      {
          this.alertConfig.type = 'success';
      }
      else
      {
          this.alertConfig.type = 'danger'
      }
      this.alertConfig.dismissible = false;
  }
  ngOnDestroy(): void {
    // unsubscribe on destroy to prevent memory leaks
    this.subscription.unsubscribe();
  }

  closeAlert()
  {
    this.message = null;
  }
}
