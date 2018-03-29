import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-profil-info',
  templateUrl: './profil-info.component.html',
  styleUrls: ['./profil-info.component.css']
})
export class ProfilInfoComponent implements OnInit {

  isActive = true;

  constructor() { }

  ngOnInit() {
  }

  id: any;

  addActiveClass(id:any) {
    this.id = id;
  }



}
