import {Component, OnInit} from '@angular/core';
import {Agency} from '../model/agency';
import {AgencyService} from '../../providers/agency.service';
import {ActivatedRoute} from '@angular/router';

@Component({
  selector: 'app-cards-agency',
  templateUrl: './cards-agency.component.html',
  styleUrls: ['./cards-agency.component.css']
})
export class CardsAgencyComponent implements OnInit {

    agency: Agency;

    constructor(private agencyService: AgencyService, private activatedRoute: ActivatedRoute) {
    }

    ngOnInit() {
        this.getAgency();
    }

    getAgency() {
        const id = +this.activatedRoute.snapshot.paramMap.get('id');
        this.agencyService.getAgency(id).subscribe(data => {
            console.log(data);
            this.agency = data;
        });
    }

}
