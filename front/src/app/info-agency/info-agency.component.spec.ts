import {async, ComponentFixture, TestBed} from '@angular/core/testing';

import {InfoAgencyComponent} from './info-agency.component';

describe('InfoAgencyComponent', () => {
  let component: InfoAgencyComponent;
  let fixture: ComponentFixture<InfoAgencyComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [InfoAgencyComponent]
    })
      .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(InfoAgencyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
