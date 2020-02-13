import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from '../services/auth.service';
import { ModalController } from '@ionic/angular';
import { CadastroProfComponent } from '../componentes/cadastro-prof/cadastro-prof.component';


@Component({
  selector: 'app-tab3',
  templateUrl: 'tab3.page.html',
  styleUrls: ['tab3.page.scss']
})
export class Tab3Page {

  //variaveis criadas
  public user = {};

  constructor(private router: Router, public authService: AuthService, private modalController:ModalController) {}

  ngOnInit(){
    this.authService.pegaUsuario().subscribe(
      (res) => {
        console.log(res);
        this.user = res;
      }
    );
  }

  redirecionaCadastroProf() {
    this.router.navigateByUrl('/cadastro-professor');
  }

  redirecionaMeusAgendamentos(){
    this.router.navigateByUrl('/meus-agendamentos');
  }

  async abreModal() {
    const modal = await this.modalController.create({
      component: CadastroProfComponent
    });
    return await modal.present();
  }
}
