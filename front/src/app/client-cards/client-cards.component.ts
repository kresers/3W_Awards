import {Component, OnInit} from '@angular/core';
import {CustomerService} from '../../providers/customer.service';
import {Customer} from '../model/customer';
import {ActivatedRoute} from '@angular/router';

@Component({
    selector: 'app-client-cards',
    templateUrl: './client-cards.component.html',
    styleUrls: ['./client-cards.component.css']
})
export class ClientCardsComponent implements OnInit {

    customer: Customer;

    constructor(private customerService: CustomerService, private activatedRoute: ActivatedRoute) {
    }

    ngOnInit() {
        this.getCustomer();
    }

    getCustomer() {
        const id = +this.activatedRoute.snapshot.paramMap.get('id');
        this.customerService.getCustomer(id).subscribe(data => {
            console.log(data);
            this.customer = data;
        });
    }

}
