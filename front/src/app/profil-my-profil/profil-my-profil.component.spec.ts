import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ProfilMyProfilComponent } from './profil-my-profil.component';

describe('ProfilMyProfilComponent', () => {
  let component: ProfilMyProfilComponent;
  let fixture: ComponentFixture<ProfilMyProfilComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProfilMyProfilComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ProfilMyProfilComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
