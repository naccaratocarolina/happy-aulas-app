import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { CadastroProfessorPage } from './cadastro-professor.page';

describe('CadastroProfessorPage', () => {
  let component: CadastroProfessorPage;
  let fixture: ComponentFixture<CadastroProfessorPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CadastroProfessorPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(CadastroProfessorPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
