import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { HomeComponent } from './home/home.component';
import { AuthGuardGuard } from '../app/guard/auth-guard.guard';
import { IsLoggedGuard } from '../app/guard/is-logged.guard';


const routes: Routes = [
  { path: '', redirectTo: 'login', pathMatch:'full'},
  { path:'login', component:LoginComponent, canActivate:[IsLoggedGuard] },
  { path: 'home', component:HomeComponent, canActivate:[AuthGuardGuard] },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
