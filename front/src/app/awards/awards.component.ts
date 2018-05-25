import { Component, OnInit } from '@angular/core';
import {Website} from '../model/website';
import {WebsitesService} from '../../providers/websites.service';
import {Award} from '../model/award';
import {AwardService} from '../../providers/award.service';
import {VoteCriteria} from '../model/voteCriteria';
import {VoteCriteriaService} from '../../providers/voteCriteria.service';
import {CategAward} from '../model/categAward';
import {CategAwardService} from '../../providers/categAward.service';

@Component({
    selector: 'app-awards',
    templateUrl: './awards.component.html',
    styleUrls: ['./awards.component.css']
})
export class AwardsComponent implements OnInit {

    website: Website;
    award: Award;
    voteCriterias: VoteCriteria;
    categAwards: CategAward;

    constructor(private websiteService: WebsitesService,
                private awardService: AwardService,
                private voteCriteriaService: VoteCriteriaService,
                private categAwardsService: CategAwardService) {
    }

    ngOnInit() {
        this.getAllWebsites();
        this.getAllAwards();
        this.getAllVoteCriterias();
        this.getAllCategAwards();
    }

    getAllWebsites() {
        this.websiteService.getWebsites()
            .subscribe(data => {
                console.log(data);
                this.website = data;
            });
    }

    getAllAwards() {
        this.awardService.getAwards()
            .subscribe(data => {
                console.log(data);
                this.award = data;
            });
    }

    getAllVoteCriterias() {
        this.voteCriteriaService.getVoteCriterias()
            .subscribe(data => {
                console.log(data);
                this.voteCriterias = data;
            });
    }

    getAllCategAwards() {
        this.categAwardsService.getCategAwards()
            .subscribe(data => {
                console.log(data);
                this.categAwards = data;
            });
    }

}

