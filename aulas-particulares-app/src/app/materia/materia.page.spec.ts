import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { MateriaPage } from './materia.page';

describe('MateriaPage', () => {
  let component: MateriaPage;
  let fixture: ComponentFixture<MateriaPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MateriaPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(MateriaPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
