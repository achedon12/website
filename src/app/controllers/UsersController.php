<?php

namespace app\controllers;

class UsersController{

    public function loginPage(): void {
        render('connexion.php');
    }

    public function index(): void {
        render('connexion.php');
    }

    public function accueilPage(): void {
        render('accueil.php');
    }

    public function accueilChefAtelier(): void {
        render('AccueilChefAtelier.php');
    }

    public function accueilAdministrateurPage(): void {
        render('accueilAdmin.php');
    }

    public function utilisateurAdministrateur():void{
        render('UtilisateurAdministrateur.php');
    }

    public function adminAddClientPage():void{
        render('adminAddClient.php');
    }

    public function adminAddEmployePage():void{
        render('adminAddEmploye.php');
    }

    public function adminInterventionPlanning():void{
        render('adminInterventionPlanning.php');
    }

    public function editClientPage(){
        render('adminModifyClient.php');
    }

    public function stockPage(){
        render('chefAtelierStock.php');
    }

    public function test(){
        render('test.php');
    }

    public function adminRemoveClient(){
        render('adminRemoveClient.php');
    }

    public function adminModifyEmploye(){
        render('adminModifyEmploye.php');
    }

    public function adminRemoveEmploye(){
        render('adminRemoveEmploye.php');
    }

    public function adminClients(){
        render('adminClients.php');
    }

    public function adminEmployes(){
        render('adminEmployes.php');
    }

    public function adminEmployesModify(){
        render('adminEmployesModify.php');
    }

    public function adminClientsModify(){
        render('adminClientsModify.php');
    }

    public function adminClientsCreate(){
        render('adminClientsCreate.php');
    }

    public function adminEmployesCreate(){
        render('adminEmployesCreate.php');
    }

    public  function adminStock(){
        render('adminStock.php');
    }

    public function adminTarification(){
        render('adminTarification.php');
    }

    public function chefAtelierInterventionPlanning(){
        render("PlanningChefAtelier.php");
    }

    public function chefAtelierStock(){
        render("chefAtelierStock.php");
    }

    public function chefAtelierClient(){
        render("chefAtelierClient.php");
    }

    public function chefAtelierRDV(){
        render("chefAtelierPriseRDV.php");
    }


}