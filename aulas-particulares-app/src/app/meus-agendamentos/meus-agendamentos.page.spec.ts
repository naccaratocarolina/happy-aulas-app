import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { MeusAgendamentosPage } from './meus-agendamentos.page';

describe('MeusAgendamentosPage', () => {
  let component: MeusAgendamentosPage;
  let fixture: ComponentFixture<MeusAgendamentosPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MeusAgendamentosPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(MeusAgendamentosPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
