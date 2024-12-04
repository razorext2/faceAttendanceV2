import { DataTable } from "simple-datatables";

if (
    document.getElementById("deductionsTable") &&
    typeof DataTable !== "undefined"
) {
    let deductionsDataTable = new DataTable("#deductionsTable", {
        paging: true,
        perPage: 5,
        searchable: true,
        sortable: true,
    });
}

if (
    document.getElementById("filter-table") &&
    typeof DataTable !== "undefined"
) {
    new DataTable("#filter-table", {
        labels: {
            perPage: "Data",
            placeholder: "Cari data...",
            class: "datatable-input w-full min-w-5",
            noRows: "No data to display",
            info: "Showing {start} to {end} of {rows} data (Page {page} of {pages} pages)",
        },
        fixedHeight: false,
        searchable: true,
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
                                    placeholder: "Cari data...",
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
