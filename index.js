import { spawn } from 'child_process'
import open from 'open'
async function start(){
	main();
	await open('http://0.0.0.0:8080');
} start();

async function main(){
	spawn('php',['-S', '0.0.0.0:8080'],{
		stdio:'inherit'
	});
}
