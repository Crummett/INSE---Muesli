// Specifies where the pert goes in the document
var container = document.getElementById("pert");

var template = Handlebars.compile(document.getElementById("pert-template").innerHTML);

// Example node set
var nodes = new vis.DataSet([
    {
        id: 1,
        description: 'example',
        earliestStart: 0,
        duration: 5,
        earliestEnd: 5,
        latestStart: 2,
        slack: 2,
        latestEnd: 7,
    },
]);

// Edges for the example set
var edges = new vis.DataSet([
    {from: 1, to: 2}
]);

// Specifies the edges/nodes to be used to make the wbt
var data = {
    nodes: nodes,
    edges: edges
};

// The various settings for the canvas
var options = {
    template: template
};

var network = new vis.Network(container, data, options);