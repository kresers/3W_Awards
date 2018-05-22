import {Component, OnInit} from '@angular/core';
import {CustomerService} from '../../providers/customer.service';
import {Customer} from '../model/customer';
import {ActivatedRoute, Params} from '@angular/router';

@Component({
  selector: 'app-client-info',
  templateUrl: './client-info.component.html',
  styleUrls: ['./client-info.component.css']
})
export class ClientInfoComponent implements OnInit {

  customer: Customer;

  constructor(private customerService: CustomerService, private activatedRoute: ActivatedRoute) {
  }

  ngOnInit() {
    this.getCustomer();
  }

    getCustomer() {
        let id = +this.activatedRoute.snapshot.paramMap.get('id');
        this.customerService.getCustomer(id).subscribe(data => {
            console.log(data);
            this.customer = data
        });
    }

}
