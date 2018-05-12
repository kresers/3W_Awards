import {Component, OnInit} from '@angular/core';
import {AgencyService} from '../../providers/agency.service';
import {Agency} from '../model/agency';
import {ActivatedRoute, Params} from '@angular/router';
import {Location} from '@angular/common';

@Component({
    selector: 'app-info-agency',
    templateUrl: './info-agency.component.html',
    styleUrls: ['./info-agency.component.css']
})
export class InfoAgencyComponent implements OnInit {

    agency: Agency;

    constructor(private agencyService: AgencyService, private activatedRoute: ActivatedRoute, private location: Location) {
    }

    ngOnInit() {
        this.getAgency();
    }

    getAgency() {
        let id  = +this.activatedRoute.snapshot.paramMap.get('id');
        this.agencyService.getAgency(id)
            .subscribe(data => {
                console.log(data);
                this.agency = data
            });
    }

}
