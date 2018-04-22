import { Component, OnInit } from '@angular/core';
import {WebsitesService} from '../../providers/websites.service';
import {Website} from "../model/website";


@Component({
  selector: 'app-website',
  templateUrl: './website.component.html',
  styleUrls: ['./website.component.css']
})
export class WebsiteComponent implements OnInit {

  constructor(private websiteService: WebsitesService) { }

  ngOnInit() {
  }

  getWebsite(){
    this.websiteService.getWebsite(1);
  }



}
