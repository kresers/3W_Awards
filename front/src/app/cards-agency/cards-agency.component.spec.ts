import {async, ComponentFixture, TestBed} from '@angular/core/testing';

import {CardsAgencyComponent} from './cards-agency.component';

describe('CardsAgencyComponent', () => {
  let component: CardsAgencyComponent;
  let fixture: ComponentFixture<CardsAgencyComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [CardsAgencyComponent]
    })
      .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CardsAgencyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
