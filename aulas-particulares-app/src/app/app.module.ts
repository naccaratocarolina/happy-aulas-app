import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouteReuseStrategy } from '@angular/router';

import { IonicModule, IonicRouteStrategy } from '@ionic/angular';
import { SplashScreen } from '@ionic-native/splash-screen/ngx';
import { StatusBar } from '@ionic-native/status-bar/ngx';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { IonicStorageModule } from '@ionic/storage';
import { HttpClientModule } from '@angular/common/http';

//Services
import { AuthService } from './services/auth.service';
import { AgendamentoService } from './services/agendamento.service';
import { MateriaService } from './services/materia.service';
import { ProfessorService } from './services/professor.service'

@NgModule({
  declarations: [AppComponent],
  entryComponents: [],
  imports: [
	  		BrowserModule,
	  		IonicModule.forRoot(),
	  		AppRoutingModule,
	  		IonicStorageModule.forRoot(),
        HttpClientModule,
  			],
  providers: [
    StatusBar,
    SplashScreen,
    { provide: RouteReuseStrategy, useClass: IonicRouteStrategy },
    AuthService,
    AgendamentoService,
    MateriaService,
    ProfessorService
  ],
  bootstrap: [AppComponent]
})
export class AppModule {}
