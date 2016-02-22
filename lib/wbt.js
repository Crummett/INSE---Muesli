// Specifies where the wbt goes in the document
var container = document.getElementById("wbt");

// Example node set
var nodes = new vis.DataSet([
    {id: 1, label: 'Node1'},
    {id: 2, label: 'Node2'},
    {id: 3, label: 'Node3'},
    {id: 4, label: 'Node4'}
]);

// Edges for the example set
var edges = new vis.DataSet([
    {from: 1, to: 2},
    {from: 1, to: 3},
    {from: 1, to: 4}
]);

// Specifies the edges/nodes to be used to make the wbt
var data = {
    nodes: nodes,
    edges: edges
};

// The various settings for the canvas
var options = {
    width: '100%', // canvas width
    height: '500px', //canvas height
    physics: { enabled: false }, // Turns off the bouncy node physics
    layout: {
        hierarchical: { // specifies the hierarchy shape
            levelSeparation: 100, // the gap between each layer of nodes
            enabled: true,
            direction: 'UD', // specifies Up Down direction
            sortMethod: 'directed', // Sorts the nodes by 'from' 'to', i.e. from 1 to 2, means 1 will be above 2.
        }
    },
    nodes: {
        shape: 'box', // specifies the box shaped nodes
    },
    edges: {
        smooth: {
            type: "horizontal",
            forceDirection: "none",
            roundness: 1 // makes the edges have an arced shape
        }
    },
    interaction:{
        multiselect: false, // disables the ability to select multiple nodes. Disabled by default, but let's be sure.
    },
    manipulation: {
        // sets what the user can and can't edit
        enabled: true,
        initiallyActive: true,
        addNode: true,
        addEdge: true,
        editEdge: false,
        deleteNode: true,
        deleteEdge: true,
    },
};

// Let's make a network...
var network = new vis.Network(container, data, options);

// Function to change the name of a node. If no node selected makes a new node with the specified name.
function changeName() {
    // makes an array of selected nodes. Only want first, hence selectedNode[0]
    var selectedNode = network.getSelectedNodes();
    var newName = document.getElementById("nodeName").value; // retrieves the name from the input box
    nodes.update({id: selectedNode[0], label: newName}); // updates the data set
};