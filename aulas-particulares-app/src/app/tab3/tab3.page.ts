import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from '../services/auth.service';
import { ModalController } from '@ionic/angular';
import { File, FileEntry } from '@ionic-native/File/ngx';
import { HttpClient } from '@angular/common/http';
//import { WebView } from '@ionic-native/ionic-webview/ngx';
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

  ionViewWillLeave () {
    this.user = {};
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

  logout() {
    this.authService.deslogaUsuario().subscribe(
      (res) => {
        console.log(res);
        localStorage.removeItem('token');
        this.router.navigate(['/tabs/tab1']);
      }
    );
  }
}
