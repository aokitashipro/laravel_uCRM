<script setup lang="ts">
import { MemberType, ErrorHandling, ArtistsData } from '@/Types/typeTest'

// let message:string = 'hello'
// message = 123

// 基本
const numberTest: number = 123
const stringTest: string = 'あああ'
const isValid: boolean = true

// 配列
const arrayTest1: string[] = ['あああ', 'いいい']
const arrayTest2: (string|number)[] = ['あああ', 123]
const arrayTest3: [string, number, boolean] = ['あああ', 123, false]

// オブジェクト
const objectTest:{
  name: string; // セミコロンが必要
  age: number; // セミコロンが必要
} = {
  name: '藤井',
  age: 30
}

// Enum
enum colorType { 
  RED = 'red', 
  BLUE = 'blue', 
  GREEN = 'green', 
  }

const bike = { 
  color: colorType.RED
  };

console.log(bike.color)

// bike.color = 'blue'; // エラー

bike.color = colorType.GREEN //ok

console.log(bike.color)

// any型
let anyTest :any
anyTest = 'あああ'
anyTest = 123

// interface
interface Member {
  name: string;
  age: number;
}

let human: Member = {
  name: "本田",
  age: 30
};

interface ErrorHandlingInterface {
  success: boolean;
  error?: { message: string };
};
interface ArtistsDataInterface  { 
  artists: { name: string }[];
  };
  
interface ArtistsResponseInterface extends ArtistsDataInterface, ErrorHandlingInterface{}

const dummyData: ArtistsResponseInterface = {
  artists: [{ name: "apple" }, { name: "banana" }],
  success: true
}

// type
// type MemberType = {
//   name: string;
//   age: number;
// }

let humanType: MemberType = {
  name: "本田",
  age: 30
};

// type ErrorHandling = {
//   success: boolean;
//   error?: { message: string };
// };

// type ArtistsData = { 
//   artists: { name: string }[];
//   };

type ArtistsResponse = ArtistsData & ErrorHandling;

const dummyDataType: ArtistsResponse = {
  artists: [{ name: "apple" }, { name: "banana" }],
  success: true
}

// 関数
const funcTest1 = (num1: number, num2: number ) : number => { 
  return num1 + num2 
  }
console.log(funcTest1(3, 5))

const funcTest2 = (num1: number, num2: number ) : void => { 
  console.log(num1, num2) 
  }
  
funcTest2(2, 4)

// 型が入ってくる場所に一旦<T>とつけておく
function genericsTest<T>(arg: T): T { return arg }

// 実際に使うときに型を指定する
console.log(genericsTest<number>(123))
console.log(genericsTest<string>("ジェネリクスで文字列"))

// typeなどにも併用可能
type genericsTypeTest<T, U> = {
  name: T;
  age: U;
}

const typeGenericsTest : genericsTypeTest<string, number> = {
  name: 'typeにジェネリクスを使ってみる',
  age: 123
}

console.log(typeGenericsTest.name)


// 型アサーション
type asTest = {
  name: string;
  age: number;
}
const member = {} as asTest ;
member.name = '山田';
member.age = 123;

</script>

<template>
TypeScriptのテストです
</template>