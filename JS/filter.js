const filter = {

    init: function(){
        const btnTous = document.querySelector('#tous-btn');
        const btnPortfolio = document.querySelector('#portfolio-btn');  
        const btnProjet = document.querySelector('#projet-btn');
        const btnBlog = document.querySelector('#blog-btn');

        let allBtn = [btnTous,btnPortfolio,btnProjet,btnBlog];
        allBtn.forEach(element => {
            element.addEventListener('click',filter.handleClick);
        });
        
    },

    handleClick: function(event){
        filter.resetStyle();
        this.classList.toggle("filter-btn-focus");

        /* Récupération de la valeur du bouton cliqué */
        let btnToCheck = event.currentTarget;
        let btnValue = btnToCheck.value;

        /* Application du gestionnaire de filtre */
        filter.management(btnValue);

    },

    resetStyle: function(){
        const btnTous = document.querySelector('#tous-btn');
        const btnPortfolio = document.querySelector('#portfolio-btn');
        const btnProjet = document.querySelector('#projet-btn');
        const btnBlog = document.querySelector('#blog-btn');

        let allBtn = [btnTous,btnPortfolio,btnProjet,btnBlog];
        allBtn.forEach(element =>{
            element.classList.remove("filter-btn-focus");
        })
    },

    management: function(btnValue){

        let portfolioProject = document.querySelectorAll('.portfolio-project');
        let projectProject = document.querySelectorAll('.project-project');
        /* Blogs = document.querySelector('.blogs-project'); */
        
        if(btnValue === "Tous"){
            portfolioProject.forEach(element => {
                element.style.display = "flex";
            });
            projectProject.forEach(element => {
                element.style.display = "flex";
            });
        }
        else if(btnValue === "Portfolio"){
            portfolioProject.forEach(element => {
                element.style.display = "flex";
            });
            projectProject.forEach(element => {
                element.style.display = "none";
            });
        }
        else if(btnValue === "Projets"){
            portfolioProject.forEach(element => {
                element.style.display = "none";
            });
            projectProject.forEach(element => {
                element.style.display = "flex";
            });
        }
        else if(btnValue === "Blogs"){
            portfolioProject.forEach(element => {
                element.style.display = "none";
            });
            projectProject.forEach(element => {
                element.style.display = "none";
            });
        }
    }

}

document.addEventListener("DOMContentLoaded", filter.init);