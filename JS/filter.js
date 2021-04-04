let app = {

    init: function(){
        btnTous = document.querySelector('#tous-btn');
        btnPortfolio = document.querySelector('#portfolio-btn');
        btnProjet = document.querySelector('#projet-btn');
        btnBlog = document.querySelector('#blog-btn');

        portfolioProject = document.querySelector('.portfolio-project');
        allProjects = document.querySelectorAll('.project-project');
    },

    handleClickTous: function(){
        btnPortfolio.classList.remove("filter-btn-focus");
        btnProjet.classList.remove("filter-btn-focus");
        btnBlog.classList.remove("filter-btn-focus");
        btnTous.classList.add("filter-btn-focus");
        portfolioProject.style.display = "flex";

        let index = 0;
        for (index in allProjects){
            allProjects[index].style.display = "flex";
        }
    },

    handleClickPortfolio: function(){
        btnProjet.classList.remove("filter-btn-focus");
        btnBlog.classList.remove("filter-btn-focus");
        btnTous.classList.remove("filter-btn-focus");
        btnPortfolio.classList.add("filter-btn-focus");
        portfolioProject.style.display = "flex";

        let index = 0;
        for (index in allProjects){
            allProjects[index].style.display = "none";
        }
    },

    handleClickProjet: function(){
        btnTous.classList.remove("filter-btn-focus");
        btnPortfolio.classList.remove("filter-btn-focus");
        btnBlog.classList.remove("filter-btn-focus");
        btnProjet.classList.add("filter-btn-focus");
        portfolioProject.style.display = "none";

        let index = 0;
        for (index in allProjects){
            allProjects[index].style.display = "flex";
        }    
    },

    handleClickBlog: function(){
        btnTous.classList.remove("filter-btn-focus");
        btnPortfolio.classList.remove("filter-btn-focus");
        btnProjet.classList.remove("filter-btn-focus");
        btnBlog.classList.add("filter-btn-focus");
        portfolioProject.style.display = "none";

        let index = 0;
        for (index in allProjects){
            allProjects[index].style.display = "none";
        }
    }

}

document.addEventListener("DOMContentLoaded", app.init);