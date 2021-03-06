const root = await (await fetch("/flux-ilias-rest-api/organisational-unit/root")).json();

await (await fetch("/flux-ilias-rest-api/organisational-units")).json();

const time = Date.now();
const organisational_unit = await (await fetch(`/flux-ilias-rest-api/organisational-unit/create/to-ref-id/${root.ref_id}`, {
    method: "POST",
    headers: {
        "Content-Type": "application/json"
    },
    body: JSON.stringify({
        title: `Organisational unit ${time}`
    })
})).json();

await (await fetch(`/flux-ilias-rest-api/organisational-unit/by-id/${organisational_unit.id}`)).json();

await (await fetch(`/flux-ilias-rest-api/organisational-unit/by-id/${organisational_unit.id}/update`, {
    method: "POST",
    headers: {
        "Content-Type": "application/json",
        "X-Http-Method-Override": "PATCH"
    },
    body: JSON.stringify({
        description: "Some description of the organisational unit"
    })
})).json();
