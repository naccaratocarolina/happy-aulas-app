import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Tab1 } from '../tab1/tab1.page';
import { ActivatedRoute } from '@angular/router';
import { MateriaService } from '../services/materia.service';

@Component({
  selector: 'app-materia',
  templateUrl: './materia.page.html',
  styleUrls: ['./materia.page.scss'],
})
export class MateriaPage implements OnInit {
  public materia = {};

  constructor(private router: ActivatedRoute, public materiaService: MateriaService) {
    this.materiaId = this.router.snapshot.params["materiaId"];
  }

  ngOnInit(materiaId) {
    this.materiaService.findSubject(this.materiaId).subscribe(
      (res) => {
        console.log(res[0]);
        this.materia = res[0];
      }
    );
  }

}
