import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http'
import { AppComponent } from './app.component';
import { RegisterComponent } from './components/register/register.component';
import {FormsModule, NgForm} from '@angular/forms';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './components/login/login.component';
import { AppRoutingModule } from './/app-routing.module';


@NgModule({
  declarations: [
    AppComponent,
    RegisterComponent,
    LoginComponent
  ],
  imports: [
    BrowserModule,
      FormsModule,
      HttpClientModule,
      AppRoutingModule,

  ],
  providers: [],
  bootstrap: [AppComponent]
})

export class AppModule { }
