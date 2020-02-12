import { Component, OnInit } from '@angular/core';
import { ModalController } from '@ionic/angular';
import { Router } from '@angular/router';

@Component({
  selector: 'app-cadastro-prof',
  templateUrl: './cadastro-prof.component.html',
  styleUrls: ['./cadastro-prof.component.scss'],
})
export class CadastroProfComponent implements OnInit {

  constructor(private modalController:ModalController) { }

  ngOnInit() {}

  async fechaModal() {
    await this.modalController.dismiss();
  }
}
