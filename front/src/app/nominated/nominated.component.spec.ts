import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NominatedComponent } from './nominated.component';

describe('NominatedComponent', () => {
  let component: NominatedComponent;
  let fixture: ComponentFixture<NominatedComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NominatedComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NominatedComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
