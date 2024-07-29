import { ComponentFixture, TestBed } from '@angular/core/testing';
import { PrioritizePage } from './prioritize.page';

describe('PrioritizePage', () => {
  let component: PrioritizePage;
  let fixture: ComponentFixture<PrioritizePage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(PrioritizePage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
