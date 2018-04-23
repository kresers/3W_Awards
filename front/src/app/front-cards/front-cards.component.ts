import {Component, OnInit} from '@angular/core';
import {WebsitesService} from "../../providers/websites.service";

@Component({
  selector: 'app-front-cards',
  templateUrl: './front-cards.component.html',
  styleUrls: ['./front-cards.component.css']
})
export class FrontCardsComponent implements OnInit {

  constructor(private websiteService: WebsitesService) {
  }

  ngOnInit() {
  }

  getAll() {
    this.websiteService.getWebsites();
  }

}
