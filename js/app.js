console.log("I am here!");

const containerDiv = document.getElementById("vizContainer");
const url = "https://public.tableau.com/views/Book2_17340383201630/Dashboard1?:language=en-US&publish=yes&:sid=&:redirect=auth&:display_count=n&:origin=viz_share_link";
const options = {
    hideTabs: true,
    height: 1050,
    width: 1250,
    onFirstInteractive: function(){
        console.log("Hey, my dashboard is ready!");
    },
    onFirstVizSizeKnown: function(){
        console.log("Hey, my dashboard has a size");
    }
};


function initViz() {
    let viz = new tableau.Viz(containerDiv, url, options);
}

document.addEventListener('DOMContentLoaded', initViz);