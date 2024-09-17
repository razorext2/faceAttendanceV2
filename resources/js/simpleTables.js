import { DataTable } from "simple-datatables";
if (
    document.getElementById("filter-table") &&
    typeof DataTable !== "undefined"
) {
    const dataTable = new DataTable("#filter-table", {
        labels: {
            searchTitle: "Search within data",
            perPage: "Data",
            noRows: "No data to display",
            info: "Showing {start} to {end} of {rows} data (Page {page} of {pages} pages)",
        },
        fixedHeight: true,
        searchable: false,
        paging: true, // enable or disable pagination
        perPage: 10, // set the number of rows per page
        perPageSelect: [5, 10, 20, 50], // set the number of rows per page options
        tableRender: (_data, table, type) => {
            if (type === "print") {
                return table;
            }
            const tHead = table.childNodes[0];
            const filterHeaders = {
                nodeName: "TR",
                attributes: {
                    class: "search-filtering-row",
                },
                childNodes: tHead.childNodes[0].childNodes.map(
                    (_th, index) => ({
                        nodeName: "TH",
                        childNodes: [
                            {
                                nodeName: "INPUT",
                                attributes: {
                                    class: "datatable-input",
                                    type: "search",
                                    "data-columns": "[" + index + "]",
                                },
                            },
                        ],
                    })
                ),
            };
            tHead.childNodes.push(filterHeaders);
            return table;
        },
    });
}
