import {Component, OnInit} from '@angular/core';
import {WebsitesService} from "../../providers/websites.service";
import {Website} from '../model/website';

@Component({
  selector: 'app-front-cards',
  templateUrl: './front-cards.component.html',
  styleUrls: ['./front-cards.component.css']
})
export class FrontCardsComponent implements OnInit {

  website: Website;
  constructor(private websiteService: WebsitesService) {
  }

  ngOnInit() {
    this.getAll()
  }

  getAll() {
    this.websiteService.getWebsites()
      .subscribe( data => {
        console.log(data);
        this.website = data
      });
  }
}
